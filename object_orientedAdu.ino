#ifndef TestLibuary_h
#define TestLibuary_h


#if (ARDUINO >=100) //this always comes before the class definition

#include "Arduino.h"

# else
#include "WProgram.h"//this is only useful when i used a different IDE to class the libuary 
#endif

class TestLib_1

{
  public:
    TestLib_1(int pin); //constructor
    String text();
    void PrintText();
    void Blink_2();

  private:
    int _pin;//useful if i have multiple devices running the same code with different variables
    //by making the variable private if it changes in one instance of the class it doesn't affect the rest
};


#endif




//constructor
TestLib_1::TestLib_1(int pin)

{ pinMode(pin, OUTPUT);

  _pin = pin;
  //_pin is a private variable used within the class


}

String TestLib_1::text() {

  String constructorString = "Inside contructor! ";
  return  constructorString;

}
/**********************************************/

//public function Blink definiftions
void TestLib_1::PrintText()
{
  Serial.println("inside //public function Blink definiftion");
}
/*******************************/

void TestLib_1::Blink_2() {

  digitalWrite(_pin, HIGH);
  delay(3000);
  digitalWrite(_pin, LOW);
  delay(100);
  Serial.println("Inside function called from libuary! ");
}




TestLib_1 testLib_1(13) ;//instance of my class TestLib_1
TestLib_1 Second(12); //each time i change the number on an instance its
TestLib_1 testLib_2(11) ;//becomes specific to that cause i used a private variable
void setup()

{
  Serial.begin(9600);


  testLib_1.PrintText();
  String newtext = testLib_1.text();
  Serial.println(newtext);
}

void loop() {
  testLib_1.Blink_2();
  delay(2000);
  Second.Blink_2();
  delay(2000);
  testLib_2.Blink_2();
  delay(2000);
}



  sim.println("AT+SAPBR=3,1,\"CONTYPE\",\"GPRS\"");
  delay(1000);
  gsmRead();
  sim.println("AT+SAPBR=3,1,\"APN\",\"web.tigo.com.gh\"");
  delay(5000);
  gsmRead();

  sim.println("AT+SAPBR=1,1");
  delay(10000);
  gsmRead();
  sim.println("AT+SAPBR=2,1");
  delay(10000);
  gsmRead();

  sim.println("AT+HTTPINIT");
  delay(2000);
  gsmRead();

  //API
  sim.print(("AT+HTTPPARA=\"URL\",\"http://ratty53iadu.000webhostapp.com/smartbin_talk.php?" + value + "="));
  sim.print(server_message);
  sim.println("\"");
  delay(1000);
  gsmRead();

  sim.println("AT+HTTPACTION=0");
  delay(8000);
  gsmRead();



  sim.println("AT+HTTPTERM");
  delay(1000);
  gsmRead();

  sim.println("AT+CFUN=0");
  delay(2000);

  sim.println("AT+CFUN=1");
  delay(3000);