# Setup Guide

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- SQLite support enabled in PHP

## Installation Steps

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd 3dapp_costa
   ```

2. **Web Server Configuration**
   - Point document root to project directory
   - Ensure `.htaccess` is enabled for Apache
   - For Nginx, configure URL rewriting manually

3. **File Permissions**
   ```bash
   chmod 755 public/
   chmod 644 database/costa_information.db
   ```

4. **Database Setup**
   - Visit `/apiCreateTable` to create tables
   - Visit `/apiInsertData` to populate with sample data

## Troubleshooting

- **Database errors**: Check SQLite extension is enabled
- **File not found**: Verify file paths in configuration
- **Permission denied**: Check file/directory permissions
- **3D models not loading**: Ensure X3DOM scripts are properly loaded

## Development Mode

Enable detailed error reporting by modifying `src/config/config.php`:
```php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
```