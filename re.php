<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<?!= HtmlService.createHtmlOutputFromFile('css').getContent() ?>
</head>
<body>

<div class="wrapper">
    <div class="title">
      ฟอร์มลงทะเบียน
    </div>
    <form class="form" id="myForm" onsubmit="submitForm()">
       <div class="inputfield">
          <label>ชื่อ</label>
          <input type="text" class="input" id="name" name="name">
       </div>  
        <div class="inputfield">
          <label>สกุล</label>
          <input type="text" class="input" id="lastName" name="lastName">
       </div>  
       <div class="inputfield">
          <label>รหัสผ่าน</label>
          <input type="password" class="input" id="passWord" name="passWord">
       </div>  
      <div class="inputfield">
          <label>ยืนยันรหัสผ่าน</label>
          <input type="password" class="input" id="confirm" name="confirm">
       </div> 
        <div class="inputfield">
          <label>เพศ</label>
          <div class="custom_select">
            <select  id="sex" name="sex">
              <option value="">เลือก</option>
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>อีเมล</label>
          <input type="text" class="input" id="email" name="email">
       </div> 
      <div class="inputfield">
          <label>เบอร์โทร</label>
          <input type="text" class="input" id="phone" name="phone">
       </div> 
      <div class="inputfield">
          <label>ที่อยู่</label>
          <textarea class="textarea" id="address" name="address"></textarea>
       </div> 
      <div class="inputfield">
          <label>รหัสไปรษณีย์</label>
          <input type="text" class="input" id="code" name="code">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>ยอมรับข้อกำหนดและเงื่อนไข</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="ลงทะเบียน" class="btn">
      </div>
    </form>
</div>	
	<script>
    function submitForm(){
      event.preventDefault()
      var obj = {}
      var formData = $('#myForm').serializeArray()
      formData.forEach(el=>obj[el.name] = el.value)
      google.script.run.withSuccessHandler(()=>{
        document.getElementById('myForm').reset()
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'บันทึกเรียบร้อยแล้ว',
  showConfirmButton: false,
  timer: 1500
})
      }).saveData(obj)
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>