char dataString[50] = {0};
int a =0; 
void setup() {
Serial.begin(9600);              //Starting serial communication
}
  
void loop() {
  int sensorValue;
  sensorValue = analogRead(A0);
  if(sensorValue >= 150)
  {
    a=1;
    sprintf(dataString,"%02X",a); // convert a value to hexa 
  Serial.println(dataString); 
  }
  else 
  {
    a=0;
  Serial.println(dataString); 
   sprintf(dataString,"%02X",a); // convert a value to hexa 
  } 
  delay(100);                  // give the loop some break
}
