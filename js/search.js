var xhttp = new XMLHttpRequest();
let emps = [];
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        loadEmps(JSON.parse(this.response).employees);
    }
};
xhttp.open("GET", "../php/fetch_emp.php", true);
xhttp.send();

function loadEmps(employees){
    for(var i = 0; i<employees.length; i++){
        emps.push(employees[i]);
    }
}

function search(){
    var tbody = document.getElementById("tbody");
    while(tbody.firstChild) {
        tbody.removeChild(tbody.firstChild);
    }

    var title = document.getElementById("title");
    let selectedTitle = this.title.options[title.selectedIndex].text;
    
    for(let i = 0; i<emps.length; i++){
        if(emps[i].title==selectedTitle){
        var tr = document.createElement("tr"); 
        var first_name = document.createElement("td");
        var last_name = document.createElement("td");
        var birth_year = document.createElement("td");
        var monthly_salary = document.createElement("td");   
        var first_nameVal = document.createTextNode(emps[i].first_name);
        var last_nameVal = document.createTextNode(emps[i].last_name);
        var birth_yearVal = document.createTextNode(emps[i].year_of_birth);
        var monthly_salaryVal = document.createTextNode("$" + emps[i].monthly_salary);        
        first_name.appendChild(first_nameVal);
        last_name.appendChild(last_nameVal);
        birth_year.appendChild(birth_yearVal);
        monthly_salary.appendChild(monthly_salaryVal);
        tr.appendChild(first_name);
        tr.appendChild(last_name);
        tr.appendChild(birth_year);
        tr.appendChild(monthly_salary);
        tbody.appendChild(tr);	
        }
    }
}