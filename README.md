# twig-for-codeigniter4
Twig for Codeigniter 4, Twig Template Engine for Codeigniter 4

Upload file Common.php lên đường dẫn App/Common.php của ứng dụng

# Sử dụng
Tạo file App/Views/example.twig với nội dung
```
Hi, {{ name }}!
```

Đặt code sau trong Controller muốn hiển thị


```
$template = new \Template;
$template->display('example', ['name' => 'Codeigniter']);
```
