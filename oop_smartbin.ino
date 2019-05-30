/* -a function to indicate bin status
*
*  -boot arduino => power switch starts the arduino and the sim800l and connects server
*   writes on the serial monitor that the arduino is on and send that on to the server
*
*   -
*/
#ifndef Smartbin_h
#define Smartbin_h

#if (ARDUINO >= 100)

#include "Arduino.h"

#else
#include "WProgram.h"
#endif

#include "SoftwareSerial.h" 

class Smartbin_1

{
public:
  Smartbin_1(int pin); //constructor
  ~Smartbin_1();
  String text();
  void PrintText();
  void Blink_2();
  void boot_(String bat_status);

private:
  int _pin; //useful if i have multiple devices running the same code with different variables
            //by making the variable private if it changes in one instance of the class it doesn't affect the rest

  String battery          
};

#endif

//#definiftions

//constructor
Smartbin_1::Smartbin_1(int pin, String bat_status;){
  //C::C( double a, double b, double c): X(a), Y(b), Z(c)

    SoftwareSerial(10, 11);

    Serial.begin(9600);
    
  pinMode(pin, OUTPUT);

  _pin = pin;
   
  boot_(battery);

}

//destructor
Smartbin_1::~Smartbin_1(void)
{
}

String Smartbin_1::text()
{

  String constructorString = "Inside contructor! ";
  return constructorString;
}
/**********************************************/

//public function Blink definiftions
void Smartbin_1::PrintText()
{
  Serial.println("inside //public function Blink definiftion");
}
/*******************************/

void Smartbin_1::Blink_2()
{

  digitalWrite(_pin, HIGH);
  delay(3000);
  digitalWrite(_pin, LOW);
  delay(100);
  Serial.println("Inside function called from libuary! ");
}

void Smartbin_1::boot_(String bat_status)
{

  if (!conn_)
  {

    serial_m("Connection to server failed!");
  }

  else
    battery = bat_status;
  delay(5);
    conn_server("The arduino is on");
    digitalWrite(powerLed, HIGH);
    conn_server(battery);
}

//conn_server()
// serial_m()
//conn_ true

/*
TestLib_1 testLib_1(13) ;//instance of my class TestLib_1
TestLib_1 Second(12); //each time i change the number on an instance its
TestLib_1 testLib_2(11) ;//becomes specific to that cause i used a private variable
*/


//application 

Smartbin_1:dustbin_1(2, "full"); 

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