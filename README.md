# 台大用藥營養追蹤系統  

## 系統架構
* 前端：  
    1. CSS: Bootstrap  
    2. Javascript: 原生js,Jquery  
    3. Laravel Blade  

* 後端：  
    1. PHP-Laravel  
    2. DataBase-MySQL  

## 資料庫設計
* Table Lists
    1. employees 員工列表   
    2. patitents 病患列表   
    3. patitent_replies 病患回饋單   
    4. doctor_replies 醫師回饋單
    5. task_schedule 任務排程
    6. task_list 任務類型列表   
 
 1. employees 員工列表  
    * employees_id 員工id  
    * employees_name 員工名稱  
    * employees_account 員工帳號  
    * employees_password 員工密碼   
    * employees_level 員工職位   
 
 2. patitents 病患列表 
    * patitents_id 病患id  
    * patitents_name 病患名稱   
    * patitents_access_token 病患token(for QRCode)  
    
 3. patitent_replies 病患回饋單  
    * patitent_replies_id 病患回饋單id  
    * patitent_replies_patitent_id 對應到的病患id  
    * patitent_replies_text 回饋單內容  
    * patitent_replies_title 回饋單標題  

 4. doctor_replies 醫師回饋單  
    * doctor_replies_id 醫師回饋單id    
    * doctor_replies_employee_id 醫師回饋單員工id  
    * doctor_replies_medicine_description 藥物詳述  
    * doctor_replies_pharmacist_reply 藥師回覆內容  
    
 5. task_schedule 任務排程
    * schedule_id 任務id
    * patitent_id 病患id
    * submit_by 上傳者id
    * task_content 任務內容
    
 6. task_list 任務類型列表
    * task_id 任務id
    * task_content 任務內容
    * task_order 任務順序

## Controller
1. LoginController 登入相關功能
2. DoctorController 醫師操作相關功能
3. NotificationController 回饋函相關功能

