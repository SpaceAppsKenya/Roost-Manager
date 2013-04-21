/**
 * 
 */
package com.example.roostmanager;

/**
 * @author allay
 *
 * A user model class
 *
 */
public class ManagerUser {
	
	 // user detail
	 private static String userID;
	 private static String userName;
	 private String firstname;
	 private String lastName;
	 private String email;
	 private String phoneNumber;
	 
	 
	 public ManagerUser(String username){
		 
		 this.userName = username;
	 }
	 public static void setUserID(String userid)
	 {
		 userID = userid;
	 }
	 
	 public static void setUsername(String name)
	 {
		 userName = name;
	 }
	 
	 public void setFirstName(String name)
	 {
		 firstname = name;
	 }
	 
	 public void setLastName(String name)
	 {
		lastName = name;
	 }
	 
	 public void setEmailAddress(String emailAddress)
	 {
		 email = emailAddress;
	 }
	 
	 public void setPhoneNumber(String phoneNum)
	 {
		 phoneNumber = phoneNum;
	 }
	 
	 public static String getUserID()
	 {
		return userID;
	 }
	 
	 public static String getUsername()
	 {
		return userName;
	 }
	 
	 public String getFirstName()
	 {
		 return firstname;
	 }
	 
	 public String getLastName()
	 {
		 return lastName;
	 }
	 
	 public String getEmailAddress()
	 {
		 return email;
	 }
	 
	 public String getPhoneNumber()
	 {
		 return phoneNumber;
	 }
 
}
