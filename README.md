# Eventra (Event Management Database)
----------------------------------

## Table of Contents
-----------------

* [About](#about)
* [Significance](#significance)
* [Tools and Concepts Used](#tools-and-concepts-used)
* [Database Introduction](#database-introduction)
* [Front End Technologies](#front-end-technologies)
* [Back End Technology](#back-end-technology)

## About
-----

This project is aimed at simplifying the event planning process. It provides users with the flexibility to choose from a diverse range of caterers, venues, decorators, DJs, and other event-related services, according to their preferences and budget constraints. Eventra offers preplanned packages at discounted prices, but clients can also create customized packages tailored to their specific event needs. To ensure transparency, all caterers, decorators, and venues are rated and reviewed by previous customers, allowing clients to make informed decisions based on service quality and budget requirements.

## Significance
------------

This project is significant as it empowers clients to make informed choices about their events, considering factors such as service quality, affordability, and personal preferences. It also helps prevent clients from being exploited by large event management companies offering rigid package deals.

## Tools and Concepts Used
-------------------------

### Front-end

* HTML (HyperText Markup Language)
* JavaScript
* CSS (Cascading Style Sheets)

### Back-end

* PHP (Hypertext Preprocessor)

## Database Introduction
---------------------

Eventra's database is designed with multiple tables to store and manage the necessary data efficiently. Here is an overview of the key tables in our database:

### Tables

#### client

| Column Name | Description |
| --- | --- |
| client_id | Unique identifier for the client |
| client_name | Name of the client |
| age | Age of the client |
| phone_no | Phone number of the client |
| gender | Gender of the client |
| address | Address of the client |
| profession | Profession of the client |
| occasion | Occasion for which the event is being planned |
| username | Username chosen by the client |
| password | Password chosen by the client |
| bill | Total bill for the event |

#### companies

| Column Name | Description |
| --- | --- |
| comp_id | Unique identifier for the company |
| comp_name | Name of the company |
| comp_email | Email address of the company |
| comp_website | Website of the company |
| comp_contact | Contact information of the company |

#### caterers

| Column Name | Description |
| --- | --- |
| cat_id | Unique identifier for the caterer |
| cat_name | Name of the caterer |
| cat_contact | Contact information of the caterer |
| cat_ratings | Ratings given by previous customers |
| cat_review | Reviews given by previous customers |
| comp_id | Foreign key referencing the companies table |
| cat_price | Price of the catering service |

#### venue

| Column Name | Description |
| --- | --- |
| ven_id | Unique identifier for the venue |
| ven_name | Name of the venue |
| ven_contact | Contact information of the venue |
| ven_ratings | Ratings given by previous customers |
| ven_review | Reviews given by previous customers |
| comp_id | Foreign key referencing the companies table |
| ven_price | Price of the venue |

#### decorations

| Column Name | Description |
| --- | --- |
| decor_id | Unique identifier for the decorator |
| decor_name | Name of the decorator |
| decor_contact | Contact information of the decorator |
| decor_ratings | Ratings given by previous customers |
| decor_review | Reviews given by previous customers |
| comp_id | Foreign key referencing the companies table |
| decor_price | Price of the decoration service |

#### custom_booking

| Column Name | Description |
| --- | --- |
| cbid | Unique identifier for the custom booking |
| cid | Foreign key referencing the client table |
| vid | Foreign key referencing the venue table |
| did | Foreign key referencing the decorations table |

#### client_bill

| Column Name | Description |
| --- | --- |
| bill_id | Unique identifier for the bill |
| clientid | Foreign key referencing the client table |
| bookingid | Foreign key referencing the custom_booking table |

## Front End Technologies
-------------------------

For the front end of Eventra, we are utilizing a combination of web development technologies to create a user-friendly interface:

### HTML (HyperText Markup Language)

HTML is used to structure the basic layout of webpages that will contain the content of our Event Management Database. It includes elements such as headings, forms, and input fields.

### JavaScript

JavaScript enhances the user experience by adding dynamic behavior to webpages. It allows us to create interactive features that respond to user actions, improving usability.

### CSS (Cascading Style Sheets)

CSS is employed to define the visual styles and formatting of our webpages. It ensures a polished and consistent look for the user interface.

## Back End Technology
---------------------

The back end of Eventra is powered by the following technology:

### PHP (Hypertext Preprocessor)

PHP is used to establish connections between our MySQL database and the HTML front end. It acts as the middleware responsible for handling data retrieval, processing, and interaction between the user interface and the database. We are using various PHP extensions to connect with MySQL, including mysqli, mysqlInd, and pdo_mysql.
