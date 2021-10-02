<?php 
    namespace Config;
    use Config\Request as Request;

    class Router
    {
        public static function Route(Request $request)
        {
            $controllerName = $request->getcontroller() . 'Controller';
            //var_dump($controllerName);
            $methodName = $request->getmethod();
            //var_dump($methodName);
            $methodParameters = $request->getparameters();          
            //var_dump($methodParameters);
            $controllerClassName = "Controllers\\". $controllerName;            

            $controller = new $controllerClassName;
            
            if(!isset($methodParameters))            
                call_user_func(array($controller, $methodName));
            else
                call_user_func_array(array($controller, $methodName), $methodParameters);
        }
    }
?>