# 🖥️ TechHub - Laptop Store Web Project

A modern, responsive e-commerce website for laptops, desktops, and computer accessories built with HTML, CSS, JavaScript, and PHP.

## 📋 Table of Contents

- Overview
- Features
- Technologies Used
- Project Structure
- Pages
- Installation & Setup
- Database Setup
- Usage
- Design System
- Future Enhancements
- Contributing

## 🌟 Overview

TechHub is a comprehensive e-commerce platform designed for selling laptops, desktop computers, and accessories. The project features a modern, responsive design with a clean user interface, product catalog management, user authentication, and shopping cart functionality.

## ✨ Features

### 🛍️ E-commerce Features

- **Product Catalog**: Browse laptops, desktops, and accessories
- **Product Details**: Detailed product pages with specifications, reviews, and warranty information
- **Shopping Cart**: Add to cart functionality with quantity management
- **Checkout Process**: Multi-step checkout with order summary
- **Product Search & Filtering**: Easy navigation and product discovery
- **Wishlist**: Save favorite products for later

### 👤 User Management

- **User Registration**: Create new user accounts
- **User Login**: Secure authentication system
- **Password Recovery**: Forgot password functionality
- **User Profile Management**: Account management features

### 📱 Design & UI/UX

- **Responsive Design**: Mobile-first approach, works on all devices
- **Modern Interface**: Clean, professional design with smooth animations
- **Interactive Elements**: Hover effects, transitions, and dynamic content
- **Accessibility**: Focus on usability and accessibility standards
- **Brand Consistency**: Cohesive design system throughout

### 🔧 Technical Features

- **Database Integration**: MySQL database for user management
- **PHP Backend**: Server-side processing for authentication
- **JavaScript Functionality**: Interactive features and form validation
- **CSS Grid & Flexbox**: Modern layout techniques
- **Font Awesome Icons**: Professional iconography
- **Google Fonts**: Typography with Inter font family

## 🛠️ Technologies Used

### Frontend

- **HTML5**: Semantic markup structure
- **CSS3**: Advanced styling with custom properties, grid, flexbox
- **JavaScript (ES6+)**: Interactive functionality and DOM manipulation
- **Font Awesome 6.4.0**: Icon library
- **Google Fonts**: Inter font family

### Backend

- **PHP**: Server-side scripting for user authentication
- **MySQL**: Database management system

### Development Tools

- **Git**: Version control
- **VS Code**: Code editor
- **Browser DevTools**: Testing and debugging

## 📁 Project Structure

```
laptopStore-webProject/
├── assets/
│   ├── css/                    # Stylesheets
│   │   ├── home.css           # Homepage styles
│   │   ├── navbar.css         # Navigation styles
│   │   ├── footer.css         # Footer styles
│   │   ├── laptop.css         # Laptop catalog styles
│   │   ├── laptopDetails.css  # Laptop detail page styles
│   │   ├── desktop.css        # Desktop catalog styles
│   │   ├── desktopDetails.css # Desktop detail page styles
│   │   ├── accessories.css    # Accessories catalog styles
│   │   ├── accessoryDetails.css # Accessory detail page styles
│   │   ├── login.css          # Login page styles
│   │   ├── signup.css         # Signup page styles
│   │   ├── checkout.css       # Checkout page styles
│   │   └── ...
│   ├── js/                    # JavaScript files
│   │   ├── menu.js           # Mobile menu functionality
│   │   ├── slider.js         # Image slider functionality
│   │   ├── footer.js         # Footer interactions
│   │   └── checkout.js       # Checkout process
│   └── images/               # Static assets
│       ├── banners/          # Banner images
│       ├── icons/            # Brand and social icons
│       └── products/         # Product images
├── admin/                    # Admin panel (future development)
├── config/                   # Configuration files (future development)
├── includes/                 # PHP includes (future development)
├── models/                   # Data models (future development)
├── *.html                    # Main pages
├── *.php                     # PHP pages with backend functionality
└── database.php              # Database connection
```

## 📄 Pages

### 🏠 Main Pages

- **`home.html`** - Homepage with featured products and navigation
- **`aboutus.html`** - Company information and mission
- **`privacyPolicy.html`** - Privacy policy and data handling
- **`termsConditions.html`** - Terms of service and conditions

### 🛍️ Product Pages

- **`Laptop.html`** - Laptop catalog page
- **`desktop.html`** - Desktop computer catalog page
- **`accessories.html`** - Accessories catalog page

### 📱 Product Detail Pages

- **`L1.html`, `L2.html`, `L3.html`, `L4.html`** - Individual laptop product pages
- **`D1.html`, `D2.html`, `D3.html`, `D4.html`** - Individual desktop product pages
- **`mouse.html`** - Wireless optical mouse details
- **`keyboard.html`** - Mechanical gaming keyboard details
- **`earphone.html`** - Premium wireless earphones details
- **`speaker.html`** - Portable Bluetooth speaker details

### 🛒 Shopping & Checkout

- **`checkout_L7.html`** - Laptop checkout page
- **`checkout_D1.html`** - Desktop checkout page (Model D1)
- **`checkout_D2.html`** - Desktop checkout page (Model D2)
- **`checkout_D4.html`** - Desktop checkout page (Model D4)

### 👤 User Authentication

- **`login.php`** - User login with database integration
- **`signup.php`** - User registration with database storage
- **`forgotPassword.php`** - Password recovery functionality

### 🔧 Backend

- **`database.php`** - MySQL database connection configuration

## 🚀 Installation & Setup

### Prerequisites

- **XAMPP/WAMP/LAMP**: Local server environment
- **MySQL**: Database server
- **Web Browser**: Modern browser (Chrome, Firefox, Safari, Edge)
- **Text Editor**: VS Code recommended

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Kavindya-Kariyawasam/laptopStore-webProject.git
   cd laptopStore-webProject
   ```

2. **Setup Local Server**

   - Install XAMPP/WAMP/LAMP
   - Place project folder in `htdocs` (XAMPP) or `www` (WAMP) directory
   - Start Apache and MySQL services

3. **Database Configuration**

   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `lapstore`
   - Import the database schema (see Database Setup section)

4. **Configure Database Connection**

   - Open `database.php`
   - Verify connection settings:
     ```php
     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "lapstore";
     ```

5. **Launch Application**
   - Open browser and navigate to `http://localhost/laptopStore-webProject`
   - Access homepage at `home.html`

## 🗄️ Database Setup

### Database Schema

Create the following table structure in your `lapstore` database:

```sql
CREATE DATABASE lapstore;
USE lapstore;

-- Users table for authentication
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    FullName VARCHAR(100) NOT NULL,
    Phone VARCHAR(15),
    Address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Products table (future enhancement)
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    category ENUM('laptop', 'desktop', 'accessory') NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    specifications JSON,
    image_url VARCHAR(255),
    stock_quantity INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Orders table (future enhancement)
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    total_amount DECIMAL(10,2) NOT NULL,
    order_status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    shipping_address TEXT,
    payment_method VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

### Sample Data

```sql
-- Insert sample user
INSERT INTO users (Username, Password, Email, FullName, Phone)
VALUES ('admin', 'admin123', 'admin@techhub.lk', 'System Administrator', '+94112345678');

-- Insert sample user
INSERT INTO users (Username, Password, Email, FullName, Phone)
VALUES ('testuser', 'password123', 'test@example.com', 'Test User', '+94987654321');
```

## 📖 Usage

### For Users

1. **Browse Products**: Navigate through laptop, desktop, and accessory catalogs
2. **View Details**: Click on products to see detailed specifications, reviews, and warranty
3. **Create Account**: Register using the signup page
4. **Login**: Access your account using the login page
5. **Add to Cart**: Select products and add them to your shopping cart
6. **Checkout**: Complete your purchase through the checkout process

### For Developers

1. **Product Management**: Add new products by creating HTML pages following existing patterns
2. **Styling**: Modify CSS files in `assets/css/` for design changes
3. **Functionality**: Extend JavaScript in `assets/js/` for new features
4. **Database**: Enhance PHP files for additional backend functionality

## 🎨 Design System

### Color Palette

- **Primary Blue**: `#3182ce` - Main brand color
- **Dark Blue**: `#2c5aa0` - Hover states and emphasis
- **Light Blue**: `#4299e1` - Accents and highlights
- **Text Colors**: `#2d3748` (dark), `#4a5568` (gray), `#718096` (light)
- **Success Green**: `#38a169` - Success states
- **Error Red**: `#e53e3e` - Error states
- **Warning Yellow**: `#d69e2e` - Warning states

### Typography

- **Primary Font**: Inter (Google Fonts)
- **Weights**: 300, 400, 500, 600, 700
- **Fallbacks**: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif

### Components

- **Buttons**: Consistent styling with hover effects
- **Cards**: Product cards with shadows and hover animations
- **Forms**: Styled inputs with validation states
- **Navigation**: Responsive navbar with mobile menu
- **Tabs**: Interactive tab system for product details

## 🔮 Future Enhancements

### Planned Features

- **Admin Panel**: Product management, order tracking, user management
- **Shopping Cart**: Persistent cart with session management
- **Payment Integration**: Stripe, PayPal, or local payment gateways
- **Inventory Management**: Stock tracking and availability
- **Order Management**: Order history and tracking
- **Email Notifications**: Order confirmations and updates
- **Product Reviews**: User-generated reviews and ratings
- **Search Functionality**: Advanced product search and filtering
- **Wishlist**: Save products for later
- **Responsive Optimization**: Enhanced mobile experience

### Technical Improvements

- **MVC Architecture**: Implement proper Model-View-Controller pattern
- **Database Optimization**: Improved queries and indexing
- **Security**: Enhanced authentication and authorization
- **API Development**: RESTful APIs for frontend-backend communication
- **Testing**: Unit tests and integration tests
- **Performance**: Image optimization and caching
- **SEO**: Search engine optimization

## 👥 Contributing

- **Developer**: Kavindya Kariyawasam
- **Repository**: [laptopStore-webProject](https://github.com/Kavindya-Kariyawasam/laptopStore-webProject)

## 🙏 Acknowledgments

- **Font Awesome**: For providing excellent icons
- **Google Fonts**: For the Inter font family
- **Google**: For product images
- **Community**: For inspiration and feedback

---

**Built with ❤️ for the tech community**

_Last updated: September 2025_
