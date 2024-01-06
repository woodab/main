function unsafeFunction(userInput) {
  // A risky use of eval, executing user-provided input
  eval(userInput);
}

let userProvidedData = "console.log('Executing user code!')";
unsafeFunction(userProvidedData);
