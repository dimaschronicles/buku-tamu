const showPass = () => {
    let curr_pass = document.getElementById('current_password')
    let new_pass = document.getElementById('new_password')
    let conf_pass = document.getElementById('new_password_conf')

    if (curr_pass.type === "password" && new_pass.type === "password" && conf_pass.type === "password") {
        curr_pass.type = "text"
        new_pass.type = "text"
        conf_pass.type = "text"
    } else {
        curr_pass.type = "password"
        new_pass.type = "password"
        conf_pass.type = "password"
    }
}