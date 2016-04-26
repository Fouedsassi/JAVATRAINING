
public class Animal {
	
	String name;
	int age;
	String breed;
	
	
	public Animal(String name, int age, String breed) {
		super();
		this.name = name;
		this.age = age;
		this.breed = breed;
	}

	
	public void define(){
		System.out.println("This is a " + breed);
		System.out.println("The animal is " + age);
		System.out.println("The " + breed + "'s name is " + name);
	}
	
	
	

}
