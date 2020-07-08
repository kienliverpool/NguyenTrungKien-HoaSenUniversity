<?php
require_once('dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý thông tin sinh viên
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ & Tên</th>
							<th>Tuổi</th>
							<th>Địa chỉ</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
<?php
if(isset($_GET['s']) && $_GET['s'] != ''){
	$sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
}
else{
	$sql = 'select * from student';
}
$studentlist = excuteResult($sql);
$index = 1;
foreach($studentlist as $std){
    echo '<tr>
    <td>'.($index++).'</td>
    <td>'.$std['fullname'].'</td>
    <td>'.$std['age'].'</td>
    <td>'.$std['address'].'</td>
    <td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
    <td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
	
	</tr>';
}
?>
                    </tbody>
				</table>
                <button class="btn btn-success" onclick="window.open('input.php','_self')">Add</button>
            </div>
		</div>
	</div>
		<script type="text/javascript">
		function deleteStudent(id){
			option = confirm('Bạn có chắc chắn muốn xóa ?')
			if(!option){
				return;
			}
			console.log(id);
			$.post('delete.php',{
				'id':id
			},function(data){
				alert(data)
				location.reload()
			})
		}
		</script>

</body>
</html>