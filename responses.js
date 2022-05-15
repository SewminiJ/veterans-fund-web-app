function getBotResponse(input) {
    //rock paper scissors
    if (input == "Hello") {
        return "🤖  How can I help you?😀";
    } else if (input == "Good day to you!") {
        return "🤖  How can I help you?😀";
    }else if (input == "I want to check my pension payment dates") {
        return "🤖  Go to the services page and click on the pension payment dates button, the dates will be appeared.🙂";
    }else if (input == "I want to check my personal details") {
        return "🤖  Go to the services page and click on the check personal details button, your details will be appeared.🙂";
    } else if (input == "Thank you") {
        return "🤖  You're welcome!Thank you for using this app.😊";
    } else{
        return "🤖  I'm sorry, I don't understand what you mean.🙁";
    }
}   