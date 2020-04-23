# Mô tả
Twig for Codeigniter 4, Twig Template Engine for Codeigniter 4x stable

## Cấu trúc thư mục
Upload file Common.php lên đường dẫn App/Common.php của ứng dụng
```
codeigniter/
└── app/
    └── Common.php
└── vendor
    └── twig
        └── ...
```

## Yêu cầu
• PHP 7.2x
• Twig 3x
• Codeigniter 4x stable

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

If you need more features, create a issues.
