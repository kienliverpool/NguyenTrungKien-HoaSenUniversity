<!-- Một số quy tắc để làm theo cho các mẫu HTML ở trên:
Đảm bảo rằng các hình thức sử dụng phương pháp = "Post"
Biểu mẫu cũng cần thuộc tính sau: enctype = "đa phần/mẫu-dữ liệu". Nó chỉ định loại nội dung nào cần sử dụng khi gửi biểu mẫu
Nếu không có yêu cầu ở trên, tải lên tệp sẽ không hoạt động.
Những thứ khác cần lưu ý:
Các loại = "tập tin" thuộc tính của < đầu vào thẻ > Hiển thị các lĩnh vực đầu vào như là một tập tin-chọn điều khiển, với một nút "Browse" bên cạnh điều khiển đầu vào
Mẫu ở trên gửi dữ liệu đến một tập tin có tên là "upload. php", mà chúng ta sẽ tạo ra tiếp theo. -->
<!-- $target _dir = "tải lên/"-chỉ định thư mục nơi tập tin sẽ được đặt
Hàm isset() được dùng để kiểm tra một biến nào đó đã được khởi tạo trong bộ nhớ của máy tính hay chưa, nếu nó đã khởi tạo (tồn tại) thì sẽ trả về TRUE và ngược lại sẽ trả về FALSE.
Vậy khi nào thì sử dụng hàm isset()?
- Lấy thông tin đăng ký từ form 
- Lấy trang hiện tại trên URL dùng để phân trang
- Thực hiện nối chuỗi trong khi biến $domain chưa chắc chắn là tồn tại
$target _file chỉ định đường dẫn của tệp được tải lên
$uploadOk = 1 chưa được sử dụng (sẽ được sử dụng sau này)
$imageFileType giữ phần mở rộng tập tin của tập tin (trong trường hợp thấp hơn)
Tiếp theo, kiểm tra xem tập tin hình ảnh là một hình ảnh thực tế hoặc một hình ảnh giả mạo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method = "post" enctype="multipart/form-data">
    <p>Select File To Upload</p>
    <input type="file" name="upload"><br>
    <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>