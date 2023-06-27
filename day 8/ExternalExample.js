function demoExternalAlert()
{
            alert("Hello Guys");
}
function demoExternalConfirm()
{
    if(confirm("Are You Sure??"))
    {
		alert("yes");
    } 
    else
    {
		alert("No");
    }
}
function demoExternalPrompt()
{
    var fName = prompt("Enter First Name");
    var lName = prompt("Enter Last Name");
    alert(fName + " " + lName);
}