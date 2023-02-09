/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
// #Write down a program to calculate the number of charachters in a string.
// #Sample String: google.com

#include <stdio.h>
#include <stdlib.h>
#include <string.h>


int main()
{
   int len;
   
   char message[100];
   
   printf("Give me a string");
   
//   scanf("%s", message);
   
   fgets(message, 100, stdin);
   
   len = strlen(message);
   
   printf("The length is %d\n", len);
}
  
