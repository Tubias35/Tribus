# Generated by Selenium IDE
import pytest
import time
import json
import random
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

class TestTribus():
  
  def test_tribus(self):
    self.driver = webdriver.Chrome()
    self.driver.get("http://tribus.dx.am/")
    self.driver.find_element(By.LINK_TEXT, "Quiz Comportamental").click()

  def questionario(self):
    for x in range(0,25):
      time.sleep(1)
      self.driver.find_element(By.CSS_SELECTOR, "li:nth-child("+str(random.randint(1,4))+") > label").click()
      self.driver.find_element(By.ID, "next").click()

if __name__ == '__main__':
  teste = TestTribus()
  teste.test_tribus()
  contador = True
  while (contador):
    teste.questionario()
    time.sleep(2)