
import java.util.ArrayList;
import java.util.*;
 
public class Student {
	   int age;
    int course;
       int i=0;
    String name;
 

    
  public Student(String s1,int age1,int Course)
  {
        this.name=s1;
        this.age=age1;
        this.course=Course;     
        
    }
    
        
    
    public void printdata(){
        System.out.println("Welcome to university registration System");
        System.out.printf("\n.............\n");
        System.out.println("Student Registration completed");
        System.out.printf("Name   :%s\n",name);
        System.out.printf("Age    :%d\n",age  );
		  
        Course my=new Course();
        my.Courseno(course);
        
    }
}
