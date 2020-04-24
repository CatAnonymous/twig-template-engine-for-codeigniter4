# Mô tả
Twig for Codeigniter 4, Twig Template Engine for Codeigniter 4x stable

Đã thử nghiệm trên môi trường Twig 3.0.3, PHP 7.4.5 và Codeigniter 4.0.2

## Yêu cầu
• PHP 7.2 hoặc mới hơn

• Codeigniter 4x stable

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

Nếu có bất cứ yêu cầu nào, hãy tạo một issue.
