function validate() {
    
    let cname = document.getElementById('custname').value;
    let address = document.getElementById('custadd').value;
    let phone = document.getElementById('custphone').value;
    let email = document.getElementById('custemail').value;
    let password = document.getElementById('custpassword').value;
    let confPassword = document.getElementById('custconfpassword').value;

    let nameRegex = /^[a-zA-Z]+,\s[a-zA-Z]+,\s[a-zA-Z]{1}\.$/;
    if (!nameRegex.test(cname)) {
        alert("Invalid name format. Please use: Lastname, Firstname, Mi");
        return false;
    }

    let addressRegex = /^[a-zA-Z0-9\s]+,\s[a-zA-Z0-9\s]+,\s[a-zA-Z\s]+$/;
    if (!addressRegex.test(address)) {
        alert("Invalid address format. Address should be in the format: Blk, Lanzones, Davao City.");
        return false; 
    }

    let phoneRegex = /^[0-9]{11}$/;
    if (!phoneRegex.test(phone)) {
        alert("Invalid phone number. It should be 11 digits.");
        return false; 
    }

    let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
        alert("Invalid email address.");
        return false; 
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false; 
    }

    if (password !== confPassword) {
        alert("Passwords do not match.");
        return false; 
    }

    return true;
}


