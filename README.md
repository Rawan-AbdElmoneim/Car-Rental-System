# Car Rental System

## Overview
The Car Rental Management System is designed to streamline the process of renting vehicles, ensuring secure access for users and administrators while maintaining data accuracy and integrity. This document outlines the key features and functionalities of the system, highlighting both the admin and user interfaces.

## Key Features

### Login and Sign-in Interface
- **User Access:** Allows new users to create accounts and existing users to log in for reservations.
- **Admin Access:** Provides administrators secure entry to oversee system operations.
- **Validation Measures:** Utilizes AJAX for real-time validation, ensuring phone numbers are 11 digits, email formats include "@" and ".", and passwords are confirmed accurately.

 -  ![Screenshot 2024-06-25 052317](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/98974370-8069-4a98-86ad-51ce6feedfe1)


### Admin Interface

#### Dashboard
- **Central Interface:** Offers functionalities for car, customer, and reservation management, cash payments, advanced search, and report generation.
 -  ![Screenshot 2024-06-25 052724](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/d49b6fb6-429f-4ced-a4b4-6fcc4d311777)


#### Advanced Search
- **Car Information:** Allows flexible searches based on car features, retrieving detailed information including model, year, status, location (country, city, office).

  - ![Screenshot 2024-06-25 052901](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/f035dc33-6634-49af-9248-7d88ef4a3bf3)


#### Car Management
- **Add New Cars:** Admins can input detailed information to add new cars.
- **Delete Cars:** Deleting cars by plate ID also removes associated reservations.
- **Update Car Attributes:** Allows updates to any car attributes, such as location, status, and price.
  
  - ![Screenshot 2024-06-25 053016](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/90aaa0cb-8939-40d8-b807-c18d337aa8a7)


#### Customer Management
- **Delete Customers:** Deleting a customer by SSN also removes associated reservations.
- **Update Customer Attributes:** Allows updates to any customer attributes, with validation to prevent duplicate phone numbers or emails.

  -![Screenshot 2024-06-25 053138](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/3e8497d1-ac5f-4abe-ba20-4ee4a26f8df3)
 

#### Reporting
- **Reservations within a Period:** Includes all car and customer information.
- **Reservations of a Car within a Period:** Details all car information.
- **Car Status on a Specific Day:** Shows the status of all cars.
- **Customer Reservations:** Includes customer information, car model, and plate ID.
- **Daily Payments:** Summarizes payments within a specific period.
- 
  -![Screenshot 2024-06-25 053346](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/8e439a1b-0280-4fe1-8820-c58042e2c7a0)

  -![Screenshot 2024-06-25 053615](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/461ec995-bfd8-41b7-a4d0-d4f20979c787)



### User Interface

#### Car Catalog
- **Search Flexibility:** Users can search based on any combination of car attributes using AJAX for real-time updates.
- **Vehicle Details:** Displays comprehensive information about selected cars, including a reservation form.

  -![Screenshot 2024-06-25 053808](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/b2316cbc-e861-484a-bed2-701bd9856e7b)
 

#### Reservation Process
- **Date Validation:** Ensures pickup and return dates are valid.
- **Payment Methods:** Supports both cash and credit card payments.
  - **Cash Payment:** Car remains available until payment is completed; reservation is canceled if payment isn't made by the pickup date.
  - **Credit Card Payment:** Prompts for card details and finalizes the rental process immediately.
 
 

#### Reservation Management
- **Reservation Summary:** Logged-in users can view detailed summaries of their reserved cars.
- **Manage Reservations:** Users can delete their bookings as needed.

    -![Screenshot 2024-06-25 053949](https://github.com/Rawan-AbdElmoneim/Car-Rental-System/assets/142115846/074ea93c-a574-4a04-b6d8-9b92d29f9ad8)


## Conclusion
The Car Rental Management System offers a comprehensive solution for managing car rentals, ensuring efficient operations for administrators and a seamless experience for users. The system's robust validation measures, flexible search capabilities, and detailed management interfaces make it an effective tool for both operational oversight and user satisfaction.
