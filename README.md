
##ویژگی ها
-سیستم otp
-مشاهده کاربران
-تغیرلوگو
-تغیر عنوان سایت
-تغیررنگ سایت



## نصب و راه‌اندازی

1. ابتدا کد پروژه را از مخزن گیت‌هاب دانلود کنید:

   ```
   git clone https://github.com/Megatrone7/Task.git
   ```

2. پیش‌نیازهای مورد نیاز را نصب کنید:

   - PHP 7.4 یا بالاتر
   - Laravel Framework 8.x
   - Node.js و npm
   -tailwind css

3. بسته‌های وابسته را نصب کنید:

   ```
   composer install
   npm install
   ```
   ```
   composer update 
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p
   ```


4. فایل محیطی (.env) را تنظیم کرده و اطلاعات اتصال به پایگاه داده را وارد کنید.
فایل sql دیتابیس را به Mysql منتقل کنید.
فایل sql داخل پروژه به نام task(1)
5. برنامه را بسازید و اجرا کنید:

   ```
   php artisan key:generate
   php artisan serve
   npm run dev
   ```



## استفاده و مثال‌ها

پس از راه‌اندازی برنامه، کاربران می‌توانند به صفحه اصلی Task وارد شوند. در این صفحه می‌توانند ساختار پوشه‌ها و فایل‌های سرور را مشاهده کنند.


## مستندات توسعه

Task بر اساس Laravel Framework 8.x ساخته شده است. ساختار پروژه به صورت زیر است:

- `app/`: کد اصلی برنامه شامل کنترلرها، مدل‌ها و خدمات
- `resources/`: قالب‌ها، استایل‌ها و اسکریپت‌های مربوط به رابط کاربری
- `routes/`: تعریف مسیرهای درخواست‌های HTTP

## مشخصات فنی

- PHP 7.4+
- Laravel Framework 8.x
- Node.js 14+
- MySQL 5.7+ 


