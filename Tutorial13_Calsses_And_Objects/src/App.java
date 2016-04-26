
class Person {
	
	// instance variables (data or state)
	String name;
	int age;
	
	
	//Classes can contain
	//1.Data
	//2.Subroutines (methods)
	
}

public class App {

	public static void main(String[] args) {
		
		Person person1 = new Person();
		person1.name= "Foued Sassi";
		person1.age= 30;
		
		Person person2 = new Person();
		person2.name= "Sarah Smith";
		person2.age= 24;
		
		System.out.println(person1.name);
	}

}
