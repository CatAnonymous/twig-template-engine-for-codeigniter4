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
Upload toàn bộ file lên thư mục gốc của ứng dụng
```
codeigniter/
└── app/
    └── Twig/
        └── Template.php
└── vendor/
    └── twig/
        └── ...
    └── ...
```

## Sử dụng
Tạo file App/Views/example.twig với nội dung
```
Hi, {{ name }}!
```

Đặt code sau trong Controller muốn hiển thị
```
$template = new \App\Twig\Template;
$template->display('example', ['name' => 'Codeigniter']);
```

Mặc định code sẽ tự động add tất cả các function của CI4. Để add function ta dùng
```
$template->addFunction($name, $callable);
```

Để add filter ta dùng
```
$template->addFilter($name, $callable);
```

## Liên hệ
• Email: khaiphan9x@gmail.com

• Facebook: https://fb.com/khaiphan9x

If you need more features, please create a issue.
