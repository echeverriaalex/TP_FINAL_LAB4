<?php
    namespace DAO;

    use Models\Company;

    interface ICompanyDAO
    {
        function Add(Company $company);
        function GetAll();
    }
?>