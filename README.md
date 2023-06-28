<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




# Limefiber
This is a Laravel test project.

<br><br>
### About the project

<p>Limefiber Emerging Solutions is Developing a Network Management System.
The system also integrates with other systems.</p>

<p>As part of the Limefiber development team. You are required to contribute
towards the development of the system by adding a global search to the system
dashboard.</p>

<p>The database structure involving the required feature involves the following
tables and their respective columns:</p> <br>


 ### Users:                                        

- ID                                                 
- Name 
- Email 
- Password     


<br>

 ### Customers: 

- ID 
- First name 
- Last name 
- Username 
- Expiry Date

<br>

### Tickets:

- ID
- Title 
- Description 
- Customer ID (ID of the ticket’s customer) 
- Scheduled Date 
- User ID (ID of the user assigned to the ticket) 

<br>

### Payments:

- ID 
- Transaction Code
- First Name 
- Last Name● Customer ID (ID of the user linked to this payment) 
- Amount 
- Account Number (username of the user making the payment) 
- Transaction Date 

<br><br>

<i> Note Only the users can log in to the system </i>

<br><br>

## Instructions
1. Create a database and store a few records in the tables. <br>
2. Create a dashboard with a search field on the top right which will display the
search results of the Customers, Tickets, and Payment tables side by side in a
single component without affecting other parts of the dashboard.
