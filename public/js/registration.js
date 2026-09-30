const accountType = document.getElementById("user_type");
const registrationFields = document.getElementById("registration-fields");
const departmentContainer = document.getElementById("department-container");
const department = document.getElementById("department_id");
registrationFields.style.display = "none";
departmentContainer.style.display = "none"; 

accountType.addEventListener("change", function () {

   if (accountType.value === "") {
    registrationFields.style.display = "none";
   
}else {
    registrationFields.style.display = "block";
}
 if (accountType.value === "Employee") {
    departmentContainer.style.display = "block";
    department.ariaRequired = "true";
 } else {
    departmentContainer.style.display = "none";
    department.required = "false";
    department.value ="";
 }
});