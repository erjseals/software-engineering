/*
* @author : Eric Seals
* @file   : TestSuite.cpp
* @date   : April-23-2019
* @brief  :
*/
#include "TestSuite.h"

TestSuite::TestSuite()
{
  m_testPass = true;
}

bool TestSuite::testIsEmpty()
{
  LinkedListOfInts testableList;
  bool boolToReturn = true;


  //Current list is empty, size = 0, front==nullptr
  if(testableList.isEmpty())
    std::cout << "Test1: (Success) Empty list returns empty." << '\n';
  else
  {
    std::cout << "Test1: (Fail) Empty list does not return empty." << '\n';
    boolToReturn = false;
  }

  //add some value to the back and check
  testableList.addBack(42);

  if(testableList.isEmpty())
  {
    std::cout << "Test2: (Fail) Non-Empty list returns empty (via addBack)." << '\n';
    boolToReturn = false;
  }
  else
    std::cout << "Test2: (Success) Non-Empty list does not return empty (via addBack)." << '\n';

  LinkedListOfInts testableList2;
  testableList2.addFront(111);

  if(testableList2.isEmpty())
  {
    std::cout << "Test3: (Fail) Non-Empty list returns empty (via addFront)." << '\n';
    boolToReturn = false;
  }
  else
    std::cout << "Test3: (Success) Non-Empty list does not return empty (via addFront)." << '\n';

  return(boolToReturn);
}

bool TestSuite::testSize()
{
  LinkedListOfInts testableList;
  bool boolToReturn = true;

  if(testableList.size() == 0)
    std::cout << "Test4: (Success) Zero sized list has size of zero." << '\n';
  else
  {
    std::cout << "Test4: (Fail) Zero sized list does not have size zero." << '\n';
    boolToReturn = false;
  }

  testableList.addBack(42);

  if(testableList.size() == 0)
  {
    std::cout << "Test5.a: (Fail) Non-Zero sized list has size of zero (via addBack)." << '\n';
    boolToReturn = false;
  }
  else
    std::cout << "Test5.a: (Success) Non-Zero sized list does not have size zero (via addBack)." << '\n';

    LinkedListOfInts testableList2;
    testableList2.addFront(111);

  if(testableList2.size() == 0)
  {
    std::cout << "Test5.b: (Fail) Non-Zero sized list has size of zero (via addFront)." << '\n';
    boolToReturn = false;
  }
  else
    std::cout << "Test5.b: (Success) Non-Zero sized list does not have size zero (via addFront)." << '\n';

  return(boolToReturn);
}

bool TestSuite::testSearch()
{
  LinkedListOfInts testableList;
  bool boolToReturn = true;

  for(int i = 0 ; i < 100 ; i++)
  {
    //Alternated front back for "RANDOMNESS"
    if(i%2 == 0)
      testableList.addBack(i);
    else
      testableList.addFront(i);
  }
  for(int i = 0 ; i < 100 ; i++)
  {
    if(testableList.search(i)!=true)
      boolToReturn = false;
  }

  if(boolToReturn)
    std::cout << "Test6: (Success) All inserted values found in list." << '\n';
  else
    std::cout << "Test6: (Fail) Inserted values not found within list." << '\n';

  return boolToReturn;
}

bool TestSuite::testAddBackRemoveBack()
{
  LinkedListOfInts testableList;
  bool boolToReturn = true;
  int first   = 10;
  int second  = 15;
  int third   = 7;
  int fourth  = 1000;
  int size = 4;

  testableList.addBack(first);
  testableList.addBack(second);
  testableList.addBack(third);
  testableList.addBack(fourth);

  //list should be 10, 15, 7, 1000 with size == 4
  if(testableList.size() != size)
  {
    std::cout << "Test7: (Fail) Addback does not properly resize list" << '\n';
    boolToReturn = false;
  }
  else
    std::cout << "Test7: (Success) Addback correctly resizes list." << '\n';

  for(int i = 0 ; i < size ; i++)
  {
    testableList.removeBack();
    if(testableList.size() != size-1-i)
      boolToReturn = false;
  }

  if(testableList.size()==0)
    std::cout << "Test8: (Success) RemoveBack correctly resizes." << '\n';
  else
  {
    std::cout << "Test8: (Fail) RemoveBack does not resize correctly." << '\n';
    boolToReturn = false;
  }

  if(testableList.size()==size)
  {
    std::cout << "\tTest8.5: (SuperFail) RemoveBack does NOTHING." << '\n';
    boolToReturn = false;
  }

  return boolToReturn;

}

bool TestSuite::testAddFrontRemoveFront()
{
  LinkedListOfInts testableList;
  bool boolToReturn = true;
  int first   = 10;
  int second  = 15;
  int third   = 7;
  int fourth  = 1000;
  int size = 4;

  testableList.addFront(first);
  testableList.addFront(second);
  testableList.addFront(third);
  testableList.addFront(fourth);

  if(testableList.size()==size)
    std::cout << "Test9: (Success) AddFront resizes the list correctly." << '\n';
  else
  {
    std::cout << "Test9: (Fail) AddFront does not resize list correctly." << '\n';
    boolToReturn = false;
  }

  for(int i = 0 ; i < size ; i++)
  {
    testableList.removeFront();
    if(testableList.size() != size-1-i)
      boolToReturn = false;
  }

  if(testableList.size()==0)
    std::cout << "Test10: (Success) RemoveFront correctly resizes." << '\n';
  else
  {
    std::cout << "Test10: (Fail) RemoveFront does not resize correctly." << '\n';
    boolToReturn = false;
  }

  if(testableList.size()==size)
  {
    std::cout << "\tTest10.5: (SuperFail) RemoveFront does NOTHING." << '\n';
    boolToReturn = false;
  }

  return boolToReturn;
}

void TestSuite::runTests()
{
  if(!testIsEmpty())
    m_testPass = false;
  if(!testSize())
    m_testPass = false;
  if(!testSearch())
    m_testPass = false;
  if(!testAddBackRemoveBack())
    m_testPass = false;
  if(!testAddFrontRemoveFront())
    m_testPass = false;

  if(m_testPass)
    std::cout << "All Tests Passed." << '\n';
  else
    std::cout << "Some Tests Failed." << '\n';
}
