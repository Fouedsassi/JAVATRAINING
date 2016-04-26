
class Person {
	
	// instance variables (data or state)
	String name;
	int age;
	
	
	//Classes can contain
	//1.Data
	//2.Subroutines (methods)
	void speak()  {
		for (int i=0; i<3; i++) {
		System.out.println("My name is: " + name+ " and I am " + age + " years old.");
		}
	}
}

public class App {

	public static void main(String[] args) {
		
		Person person1 = new Person();
		person1.name= "Foued Sassi";
		person1.age= 30;
		person1.speak();
		
		Person person2 = new Person();
		person2.name= "Sarah Smith";
		person2.age= 24;
		person2.speak();
		
		System.out.println(person1.name);
	}

}
