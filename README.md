# Costa 3D App

A 3D interactive web application showcasing Costa Coffee products with immersive X3D models and dynamic product visualization.

## Features

- **Interactive 3D Models**: X3D-powered product visualization
- **Product Catalog**: Browse Costa's coffee, cold drinks, and canned beverages
- **Responsive Design**: Bootstrap-powered responsive interface
- **Database Integration**: SQLite database for product information
- **Admin Panel**: Request management system

## Project Structure

```
├── public/                 # Static assets
│   └── assets/
│       ├── css/           # Stylesheets
│       ├── js/            # JavaScript files
│       ├── images/        # Product images and backgrounds
│       ├── fonts/         # Custom fonts
│       └── x3d/           # 3D model files
├── src/                   # Application source
│   ├── config/           # Configuration files
│   ├── controllers/      # MVC Controllers
│   ├── models/           # Data models
│   └── views/            # View templates
├── database/             # SQLite database files
├── docs/                 # Documentation
└── scripts/              # Utility scripts
```

## Technology Stack

- **Backend**: PHP 7.4+
- **Database**: SQLite
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 5
- **3D Graphics**: X3DOM
- **Libraries**: jQuery, Fancybox

## Installation

1. Clone the repository
2. Ensure PHP 7.4+ is installed
3. Configure web server to point to project root
4. Database will be created automatically on first run

## API Endpoints

- `/apiCreateTable` - Initialize database tables
- `/apiInsertData` - Populate database from JSON
- `/apiGetJsonMuseumData` - Retrieve all product data
- `/apiGetDrinkInformation` - Get specific drink details
- `/apiAddRequest` - Submit user requests
- `/apiGetRequestData` - Admin: View requests

## Product Categories

- **Hot Drinks**: Latte, Mocha, Hot Chocolate
- **Cold Drinks**: Iced Latte, Iced Chai, Cold Brew
- **Canned Products**: Ready-to-drink options

## Development

The application follows MVC architecture with clean separation of concerns. 3D models are rendered using X3DOM for cross-browser compatibility.
