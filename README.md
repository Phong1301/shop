Xin chào, để chạy source này cần phải:

-   Cài đặt:

    -   nodejs
    -   composer

-   Chạy tiếp các lệnh bên dưới để cài các phần còn thiếu

    -   npm install
    -   composer install

-   Đổi tên file .env.example thành .env , sau đó mở file này lên
    và tùy chỉnh kết nối tới database của bạn
    
    DB_HOST=127.0.0.1
    DB_PORT=3306 => port của MySQL
    DB_DATABASE=laravel => tên database của bạn
    DB_USERNAME=root => thay đổi nếu cần
    DB_PASSWORD= => thay đổi nếu cần

-   Tạo key mới:

    -   php artisan key:generate

-   Khi tạo database nhớ chỉnh định dạng = utf8mb4_unicode_ci
    sau đó import file shop.sql vào database vừa tạo

-   Tiến hành clear cache nếu cần thiết:

    -   php artisan config:cache
