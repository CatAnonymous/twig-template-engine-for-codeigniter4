# Mô tả
Twig for Codeigniter 4, Twig Template Engine for Codeigniter 4x stable

## Yêu cầu
• PHP 7.2 or newer is required

• Twig 3x

• Codeigniter 4x stable

## Cài đặt Twig
Tại thư mục gốc của Codeigniter chạy lệnh

```
composer require "twig/twig:^3.0"
```

## Cấu trúc thư mục
Upload file Common.php lên đường dẫn App/Common.php của ứng dụng
```
codeigniter/
└── app/
    └── Common.php
└── vendor/
    └── twig/
        └── ...
```

## Sử dụng
Tạo file App/Views/example.twig với nội dung
```
Hi, {{ name }}!
```

Đặt code sau trong Controller muốn hiển thị
```
$template = new \Template;
$template->display('example', ['name' => 'Codeigniter']);
```
## Liên hệ
• Email: khaiphan9x@gmail.com

• Facebook: https://fb.com/khaiphan9x

If you need more features, please create a issue.
