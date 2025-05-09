# Watchwise - Laravel Project
🧪 Step 1: Prerequisites (they need this installed) Make sure your friend has:

✅ PHP (8.x)

✅ Composer

✅ MySQL (or XAMPP)

✅ Node.js + npm (if you're using any front-end tools like Vite)

✅ Git

🧠 Step 2: Clone the Project Ask them to run:

bash Copy Edit git clone https://github.com/your-username/your-repo-name.git cd your-repo-name 📦 Step 3: Install Dependencies Run:

bash Copy Edit composer install If there's a package.json (i.e. if you're using Vite or Tailwind):

bash Copy Edit npm install 🔐 Step 4: Set Up the Environment File bash Copy Edit cp .env.example .env Then edit the .env file with their local database settings:

env Copy Edit DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=watchwise DB_USERNAME=root DB_PASSWORD=yourpassword 🗄️ Step 5: Create the Database Ask them to open phpMyAdmin or MySQL CLI and create a new database called:

sql Copy Edit CREATE DATABASE watchwise; 🔑 Step 6: Generate App Key bash Copy Edit php artisan key:generate 🧱 Step 7: Run Migrations and Seeders bash Copy Edit php artisan migrate --seed This will create all tables and populate them with fake movies & reviews.

🚀 Step 8: Start the Local Server bash Copy Edit php artisan serve Now they can visit: 👉 http://localhost:8000

🎨 (Optional) Step 9: If you're using Tailwind/Vite/etc. bash Copy Edit npm run dev 📝 TL;DR Cheat Sheet for Your Friend bash Copy Edit git clone cd composer install cp .env.example .env

Edit .env with DB settings
php artisan key:generate php artisan migrate --seed php artisan serve

# List of Credits 
## Team Memeber
Adil Surve  
Shrivignesh Kavle  
Isha Shah 
Jinal patel

