<p align="center"><a href="https://github.com/mikadojnr/Laravel-10-g4mart-ecommerce"><img src="public/assets/images/logo.png" width="400" alt="G4 Mart Logo"></a></p>

# G4 Mart Software Documentation

## 1. Introduction

Welcome to G4 Mart, your go-to ecommerce solution that enables seamless customer login and purchasing of goods. This documentation provides an overview of the software's purpose, key features, and benefits.

### Purpose and Scope

G4 Mart aims to provide a user-friendly ecommerce platform, allowing customers to authenticate, browse products, add items to a cart, and make purchases with various payment options.

### Key Features and Benefits

**Key Features:**
- User Authentication
- Admin Order Tracking
- Cart System
- Payment Integration (Cash on Delivery, Card)

**Benefits:**
- Seamless customer purchasing experience
- Increased operational efficiency
- Improved user experience

## 2. System Architecture

G4 Mart is built on the Laravel 10 architecture, ensuring a robust and scalable foundation for ecommerce functionalities.

![System Architecture Diagram](link_to_diagram_image)

## 3. Installation

### System Requirements

Before proceeding with the installation, ensure that your system meets the following requirements:

- PHP >= 7.4
- Composer installed
- Laravel 10 requirements met

### Installation Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/mikadojnr/Laravel-10-g4mart-ecommerce.git
   ```

2. Change directory to the project folder:
   ```bash
   cd Laravel-10-g4mart-ecommerce
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure the database settings:
   ```bash
   cp .env.example .env
   ```

   Edit the `.env` file with your database details:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=g4mart
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations and seed:
   ```bash
   php artisan migrate --seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

   Your G4 Mart application should now be accessible at `http://localhost:8000`.

## 4. Getting Started

### Quick Start Guide

To quickly start using G4 Mart:

1. Open your web browser.
2. Navigate to `http://localhost:8000`.
3. Register for a new account or log in if you already have one.
4. Browse products, add items to your cart, and proceed to checkout.
5. Choose your preferred payment option and complete the purchase.

### Basic Usage Examples

- Logging in as a customer.
- Adding products to the cart.
- Viewing and updating the cart contents.

## 5. User Guide

Detailed instructions for using each feature of G4 Mart will be provided in subsequent sections.

## 6. Configuration

G4 Mart allows customization of certain settings. To customize:

1. Open the `.env` file.
2. Adjust configuration variables to meet your requirements.

## 7. Troubleshooting

### Common Issues and Solutions

- **Issue:** Laravel migrations fail.
  **Solution:** Check database credentials in `.env` and ensure proper setup.

### Support

For further assistance or inquiries, please contact our support team at [officialudobad@gmail.com](mailto:officialudobad@gmail.com).

## 8. API Documentation

Currently, G4 Mart does not expose any external APIs.

## 9. Release Notes

### Version 1.0.0

- Initial release.
- Core features implemented.
- User authentication, cart system, and payment integration introduced.

## 10. Maintenance

For updates, patches, and maintenance tasks, regularly check the official repository at [https://github.com/mikadojnr/Laravel-10-g4mart-ecommerce.git](https://github.com/mikadojnr/Laravel-10-g4mart-ecommerce).

## 11. Glossary

- **Laravel 10:** A powerful PHP framework used for building web applications.
- **Composer:** A dependency manager for PHP.
- **.env:** Environment configuration file used in Laravel.
- **Migration:** A Laravel feature for database schema modification.

Thank you for choosing G4 Mart! We hope you enjoy a seamless ecommerce experience.
```

