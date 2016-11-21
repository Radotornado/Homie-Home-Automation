void setup() {
  Serial.begin(9600);
}
void loop() {
  int sersorValue;
  sersorValue = analogRead(A0);
  if(sersorValue >= 150)
  {
    Serial.print('g');
  }
  else 
  {
    Serial.print('s');
  }
}
