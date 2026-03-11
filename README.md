# FindLaw Clone for YourCPAExpert.com

This project is a pixel-perfect replication of FindLaw.com, customized for **YourCPAExpert.com**. It is built using Laravel 11 and features a responsive design, CPA-specific service sections, and a streamlined administrative portal.

## Features
- **Exact FindLaw Replication**: Layout, typography, and styles are cloned from FindLaw.com.
- **CPA Personalization**: Personalized sections for Tax Law, Accounting Services, and Expert Profiles.
- **Tawk.to Integration**: Live chat support for potential clients.
- **Responsive Design**: Fully optimized for Desktop, Tablet, and Mobile.
- **Admin Portal**: Manage experts, leads, and site content.

## Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL/MariaDB

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/ffcu-pinellas/cpaexpert.com
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Configure environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run migrations:
   ```bash
   php artisan migrate
   ```

## Deployment
Use the provided `push.ps1` script to deploy your changes to Git and trigger Hostinger auto-deployment.
```powershell
./push.ps1 "Your commit message"
```

## Credits
Replicated from FindLaw.com for educational and professional demonstration.
