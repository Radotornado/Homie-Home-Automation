// A program to send data to Raspberry PI using serial
void setup() {
  Serial.begin(9600); // Start the serial monitor
}

//Loop
void loop() {
  // Assigning a variable that contains the data from the gas sensor
  int sersorValue;
  // Reads the data through analog pin
  sersorValue = analogRead(A0);
  // Checks the value if its higher than a certain level and sends them to the RPI
  if(sersorValue >= 150)
  {
    Serial.print('1');
  }
  else 
  {
    Serial.print('0');
  }
}
