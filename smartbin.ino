#include <SoftwareSerial.h>

SoftwareSerial sim(10, 11);

int wait= 100;

int baudrate[] = {4800,9600,38400, 57600,74880,115200,230400,250000, 500000, 1000000, 2000000 };

int baudrate1= 2400;

int a =0;
void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  sim.begin(38400);
  // Serial.println("baurate is "+ baudrate1);

  
  delay(1000);
  pinMode(2, OUTPUT);
   pinMode(3, OUTPUT);
  digitalWrite(2, LOW);
    digitalWrite(3, LOW);
  delay(2000);
  Serial.println("reseting sim800l module...1");

  digitalWrite(2, HIGH); delay(2000);
  Serial.println("done reseting ");


      sim.println("AT");
  delay(100);
   Serial.println("begin!");
  while(sim.available())
  {
    Serial.write(sim.read());
  }

}

void loop() {
  // put your main code here, to run repeatedly:
    digitalWrite(3, HIGH);
    delay(2000);
    sim.println("AT+CMEE=2");
  delay(4000);
  // Serial.println("GPRS is OFF!");
  while (sim.available())
  {
    Serial.write(sim.read());
  }
      digitalWrite(3, LOW);
    delay(2000);
            sim.println("AT+CSQ=?");  //AT+CBAND? 
  delay(1000);
  // Serial.println("GPRS is OFF!");
  while(sim.available())
  {
    Serial.write(sim.read());
  }
 
              sim.println("AT+CBAND?");  //
  delay(1000);
  // Serial.println("GPRS is OFF!");
  while(sim.available())
  {
    Serial.write(sim.read());
  }
              sim.println("AT+CBAND=DCS_MODE");  //AT+CBAND? 
  delay(1000);
  // Serial.println("GPRS is OFF!");
  while(sim.available())
  {
    Serial.write(sim.read());
  }
  for(int i=0; i<3; i++)
  {
  sim.println("AT+CGATT=1");
  delay(wait);
  while (sim.available())
  {
    Serial.write(sim.read());
  }
  wait= wait+500;
  delay(wait);
  }
  sim.println("AT+SAPBR=3,1,\"CONTYPE\",\"GPRS\"");
  delay(1000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+SAPBR=3,1,\"APN\",\"internet\"");
  delay(5000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+SAPBR=1,1");
  delay(10000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }
  sim.println("AT+SAPBR=2,1");
  delay(10000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+HTTPINIT");
  delay(2000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }

  sim.print("AT+HTTPPARA=\"URL\",\"http://ghatolls.com/testing.php?value=");
  sim.print("arduino");
  sim.println("\"");
  delay(1000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+HTTPACTION=0");
  delay(8000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }
  sim.println("AT+HTTPACTION=0,20");
  delay(3000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }
  sim.println("AT+HTTPTERM");
  delay(1000);
  while (sim.available())
  {
    Serial.write(sim.read());
  }
wait = 100;
  
  baudrate1= baudrate[a];
  a++;
}