/*
* @author : Eric Seals
* @file   : TestSuite.h
* @date   : April-23-2019
* @brief  : Simple Test Suite for LinkedListOfInts.h
*/

#ifndef _TESTSUITE_H
#define _TESTSUITE_H

#include "LinkedListOfInts.h"
#include <iostream>


class TestSuite
{
public:
  //constructor
  TestSuite();
  //runs all tests!
  void runTests();
private:
  bool  m_testPass;

  //I think all these tests are pretty self explanatory

  //Depends on addBack and addFront
  bool  testIsEmpty();

  //Depends on addBack and addFront
  bool  testSize();

  //Depends on addBack and addFront
  bool  testSearch();

  //Depends on size()
  bool  testAddBackRemoveBack();

  //Depends on size()
  bool  testAddFrontRemoveFront();
};

#endif
