# Project Description📜
Stand Out with BentoLio The Ultimate Tool for Bento-Style Portfolios!
<br />
<br />
![bentoLioHero](https://github.com/user-attachments/assets/716b188e-6a7c-4ba0-aa8f-36d57b24a5b7)

# Tech Stack 💻
<img align="left" width="60px" height="60px" style="padding-right:10px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" />
<img align="left" width="60px" height="60px" style="padding-right:10px;"  src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" />
<br />
<br />
<br />
When envisioning BentoLio, I sought a technology stack that resonated with my principles of simplicity and efficiency. The TALL stack—Tailwind CSS, Alpine.js, Laravel, and Livewire—stood out as the perfect fit.
<br></br>
Tailwind CSS revolutionized my approach to UI design. Its utility-first framework empowered me to craft bespoke interfaces with ease, ensuring that every element on ReCode aligns with our unique aesthetic and functional vision.
<br></br>
Alpine.js emerged as the ideal solution for introducing interactivity within our platform. Its lightweight nature meant I could sprinkle rich, JavaScript-driven interactions without weighing down the user experience—a crucial factor for a platform that prioritizes speed and agility.
<br></br>
Laravel was a natural choice for the backbone of BentoLio. Its expressive syntax and robust features not only accelerated development but also provided a stable foundation for our platform to scale. Laravel’s vibrant ecosystem and its commitment to elegant code made it an indispensable ally in bringing BentoLio to life.
<br></br>
Livewire allowed me to blend server-side stability with front-end reactivity seamlessly. It simplified state management and made real-time updates a breeze, which is essential for a collaborative environment where developers share and manage code snippets in real-time.

Choosing the TALL stack was a deliberate decision to ensure that Survefy embodies the principles of developer-centric design. It’s a reflection of my commitment to building not just a platform but a community where innovation thrives without barriers.

# UI Design ✍🎨
When I'm designing a software first I visualize what would be the color palettes, fonts, typography and I'm also using the 8 point grid system for sizing, spacing, and laying out components relative to one another. This means that any padding, margin, button height, etc. is always a multiple of 8 pixels.

# How to run the project ❓
1.) Clone the Repository:
   - Navigate to the directory where you want to clone the project.
 ```
git clone https://github.com/CSaguinsin/BentoLio.git
```

2.) Navigate to the Project Directory:
   - After cloning, move into the project directory
 ```
cd BentoLio
```

3.) Install Composer Dependencies:
   - Run the following command to install PHP dependencies:
 ```
composer install
```

4.) Install NPM Dependencies:
   - Run these commands to install JavaScript dependencies and compile assets:
 ```
npm install
npm run dev
```

5.) Set Up Environment File:
   - Copy .env.example to .env
 ```
cp .env.example .env
```
   - Open .env and configure your environment variables, such as APP_URL, database credentials, etc.

6.) Generate Application Key:
   - Run this command to generate a new application key
 ```
php artisan key:generate
```

7.) Run Migrations:
   - Set up your database and run migrations:
 ```
php artisan migrate
```

8.) Run the application servers:
   - Use this two commands to start project
 ```
npm run dev
php artisan serve
```
  - This will start a development server at http://localhost:8000.
