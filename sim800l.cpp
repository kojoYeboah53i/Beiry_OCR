#include <SoftwareSerial.h>

SoftwareSerial sim(6,7);

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  sim.begin(4800);
  delay(2000);
}

void loop() {
  // put your main code here, to run repeatedly:
   sim.println("AT");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }
  sim.println("AT+CGATT?");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+SAPBR=3,1,\"CONTYPE\",\"GPRS\"");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+SAPBR=3,1,\"APN\",\"internet\"");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+SAPBR=2,1");
  delay(1500);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+HTTPINIT");
  delay(1500);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.print("AT+HTTPPARA=\"URL\",\"http://google.com");
  sim.print(random(1,5));
  sim.println("\"");
  delay(2000);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+HTTPACTION=0");
  delay(4000);
  while(sim.available())
  {
    Serial.write(sim.read());
  }

  sim.println("AT+HTTPTERM");
  delay(1000);
  while(sim.available())
  {
    Serial.write(sim.read());
  }
}

#include <SoftwareSerial.h>


// initialize the library by associating any needed LCD interface pin
// with the arduino pin number it is connected to

SoftwareSerial sim(10, 11);



void setup() {
  Serial.begin(9600);
  sim.begin(4800);

  Serial.println("Settings done");
}
void loop() {

  delay(100);
  while (sim.available())
  {
    
    char data = sim.read();
    delay(100);
  }
    Serial.println(data);
  
     while (Serial.available())
  {
    
    char data = sim.read();
    delay(100);
  }
  sim.println(data);
}
  sim.println("AT");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }
  sim.println("AT+CMGR=1");
  delay(100);
  while(sim.available())
  {
    Serial.write(sim.read());
  }



/***************************************************************************************************/
/*
  LiquidCrystal Library - Hello World

 Demonstrates the use a 16x2 LCD display.  The LiquidCrystal
 library works with all LCD displays that are compatible with the
 Hitachi HD44780 driver. There are many of them out there, and you
 can usually tell them by the 16-pin interface.

 This sketch prints "Hello World!" to the LCD
 and shows the time.

  The circuit:
 * LCD RS pin to digital pin 12
 * LCD Enable pin to digital pin 11
 * LCD D4 pin to digital pin 5
 * LCD D5 pin to digital pin 4
 * LCD D6 pin to digital pin 3
 * LCD D7 pin to digital pin 2
 * LCD R/W pin to ground
 * LCD VSS pin to ground
 * LCD VCC pin to 5V
 * 10K resistor:
 * ends to +5V and ground
 * wiper to LCD VO pin (pin 3)

 Library originally added 18 Apr 2008
 by David A. Mellis
 library modified 5 Jul 2009
 by Limor Fried (http://www.ladyada.net)
 example added 9 Jul 2009
 by Tom Igoe
 modified 22 Nov 2010
 by Tom Igoe
 modified 7 Nov 2016
 by Arturo Guadalupi

 This example code is in the public domain.

 http://www.arduino.cc/en/Tutorial/LiquidCrystalHelloWorld

*/

// include the library code:
#include <LiquidCrystal.h>

// initialize the library by associating any needed LCD interface pin
// with the arduino pin number it is connected to
const int rs = 12, en = 11, d4 = 5, d5 = 4, d6 = 3, d7 = 2;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

void setup() {
  // set up the LCD's number of columns and rows:
  Serial.begin(9600);
  lcd.begin(16, 2);
  // Print a message to the LCD.
  lcd.print("hello, world!");
  while(!Serial)
  {
    //wait for serial data
  }
}

void loop() {
  // set the cursor to column 0, line 1
  // (note: line 1 is the second row, since counting begins with 0):
  lcd.setCursor(0, 1);
  // print the number of seconds since reset:
  lcd.print(millis() / 1000);
}

/*******************************************************************************************************************/


void setup() {
  // initialize both serial ports:
  Serial.begin(9600);
  Serial1.begin(9600);
}

void loop() {
  // read from port 1, send to port 0:
  if (Serial1.available()) {
    int inByte = Serial1.read();
    Serial.write(inByte);
  }

  // read from port 0, send to port 1:
  if (Serial.available()) {
    int inByte = Serial.read();
    Serial1.write(inByte);
  }
}


if (Serial.available()){
  digitalWrite( LED_BUILTIN, digitalRead(LED_BUILTIN)); //!digitalRead(ledPin

  lcd.clear();
    // read all the available characters
    while (Serial.available() > 0) {
      // display each character to the LCD
      lcd.write(Serial.read());

 }

 String topText ="";
 topText.indexOf()

  for (int pp = 0; p < 13; p++) {
    // scroll one position left:
    lcd.scrollDisplayLeft();
    // wait a bit:
    delay(700);
  }

  {
  while(!Serial.available)
  {
    //wait for text
  }
  if(Serial.available)
{
  topText = readString();
  setCursor(3,0);
  lcd.print("56.00 GHC")

    setCursor(0,1);
  lcd.print("is balance left")
}
}

   switch (topText) {
      case "elvis":
         lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("Welcome Elvis");
      delay(2000); lcd.clear();

      lcd.setCursor(0, 0);
      lcd.print("press 1 for   ");

      lcd.setCursor(0, 1);
      lcd.print("account balance");
      delay(1000);

      (Serial.available()){
        //wait for keypress
      }
       if (Serial.available()){
        topText=""; 

        topText = Serial.readString();

        if (topText.equals('1')) {
      lcd.clear();
      lcd.setCursor(3, 0);
      lcd.print("56.00 GHC");

      lcd.setCursor(0, 1);
      lcd.print("is balance left");
    }
     else if (!(topText.equals('1')))
    { Serial.println("inside 3");

      lcd.clear();
      // read all the available characters
      lcd.setCursor(0, 2);
      lcd.println("please press 1 ");
      }

        break;
  
 
      default:
        // turn all the LEDs off:
lcd.clear();

    lcd.setCursor(0, 0);
    lcd.println("enter name      ");
    lcd.setCursor(0, 1);
    lcd.println("properly      ");
        
    }