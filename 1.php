@if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span>{{$_SESSION['success']}}</span>
    @endif
<?php

//     public function addStudent(){
//         return $this->render('student.add');
//     }
//     public function postStudent(){
//         if (isset($_POST['btn-submit'])){
//             $error = [];

//             if(empty($_POST['name'])){
//                 $error[] = 'Vui lòng nhập tên';
//             }
//             if(empty($_POST['year_of_birth'])){
//                 $error[] = 'Vui lòng nhập năm sinh';
//             }
//             if(empty($_POST['phone_number'])){
//                 $error[] = 'Vui lòng nhập số điện thoại';
//             }
//             if(count($error)>=1){
//                 redirect('errors',  $error, 'add-student');
//             }else{
//                 $check = $this->student->addStudent(NULL, $_POST['name'], $_POST['year_of_birth'], $_POST['phone_number']);
//                 if ($check){
//                     redirect('success',  "Thêm thành công", 'add-student');
//                 }

//             }

//         }
//     }
//     public function deleteStudent($id){
//         $check = $this->student->deleteStudent($id);
//         if($check){
//             redirect('success',  "Xóa thành công", 'list-student');
//         }
//     }
//     public function detailStudent($id){
//         $detail = $this->student->detailStudent($id);
//         return $this->render('student.edit', compact('detail'));
//     }
//     public function editStudent($id){
//         if (isset($_POST['btn-submit'])){
//             $error = [];

//             if(empty($_POST['name'])){
//                 $error[] = 'Vui lòng nhập tên';
//             }
//             if(empty($_POST['year_of_birth'])){
//                 $error[] = 'Vui lòng nhập năm sinh';
//             }
//             if(empty($_POST['phone_number'])){
//                 $error[] = 'Vui lòng nhập số điện thoại';
//             }
//             $route = 'detail-student/'.$id;
//             if(count($error)>=1){
//                 redirect('errors',  $error, $route);
//             }else{
//                 $check = $this->student->editStudent($id, $_POST['name'], $_POST['year_of_birth'], $_POST['phone_number']);
//                 if ($check){
//                     redirect('success',  "Sửa thành công", $route);
//                 }

//             }

//         }
//     }




//     public function addStudent($id, $name, $year_of_birth, $phone_number){
//        $sql = "INSERT INTO $this->table VALUES (?, ?, ?, ?)";
//        $this->setQuery($sql);
//        return $this->execute([$id, $name, $year_of_birth, $phone_number]);
//     }
//     public function deleteStudent($id){
//        $sql = "DELETE FROM $this->table WHERE id = ?";
//        $this->setQuery($sql);
//        return $this->execute([$id]);
//     }
//     public function detailStudent($id){
//         $sql = "select * from $this->table where id = ?";
//         $this->setQuery($sql);
//         return $this->loadRow([$id]);
//     }

//     public function editStudent($id, $name, $year_of_birth, $phone_number){
//         $sql = "UPDATE $this->table SET name = ?, year_of_birth = ?, phone_number = ? WHERE id= ?";
//         $this->setQuery($sql);
//         return $this->execute([ $name, $year_of_birth, $phone_number, $id]);
//     }






//no validate
// public function addStudent()
// {

//     return $this->render('student.add');
// }
// public function postStudent()
// {
//     if (isset($_POST['btn-submit'])) {
       
//         $check = $this->student->addStudent(NULL, $_POST['name'], $_POST['year_of_birth'], $_POST['phone_number']);
//         if ($check) {
//             redirect('success', "Thêm thành công", 'list-student');
//         }
//     }
// }
// public function deleteStudent($id)
// {
//     $check = $this->student->deleteStudent($id);
//     if ($check) {
//         redirect('success', "Xóa thành công", 'list-student');
//     }
// }

// public function detailStudent($id)
// {
//     $detail = $this->student->detailStudent($id);
//     return $this->render('student.edit', compact('detail'));
// }
// public function editStudent($id)
// {
//     if (isset($_POST['btn-submit'])) {
      
//         $route = 'detail-student/' . $id;
       
//             $check = $this->student->editStudent($id, $_POST['name'], $_POST['year_of_birth'], $_POST['phone_number']);
//             if ($check) {
//                 redirect('success', "Sửa thành công", $route);
//             }

//         }

    

// }



//  ?>


