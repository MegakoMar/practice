$("#reg").on("click", function () {
    var login = $("#inputUsername").val().trim();
    var pass = $("#inputPass").val().trim();
    var email = $("#inputEmail").val().trim();
    var tel = $("#inputTelephone").val().trim();

    if (login == "") {
        $("#errorMessage").text("Введите логин");
        return false;
    } else  if (pass == "") {
        $("#errorMessage").text("Введите пароль");
        return false;
    } else if (email == "") {
        $("#errorMessage").text("Введите Email");
        return false;
    } else if (tel == "") {
        $("#errorMessage").text("Введите телефон");
        return false;
    } else  if (pass.length <= 4) {
        $("#errorMessage").text("Пароль слишком простой");
        return false;
    }

    $("#errorMessage").text("");


    alert("Поздравляю! Вы успешно зарегестрировались в системе:)");
});