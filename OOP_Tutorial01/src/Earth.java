
public class Earth {
	
	public static void main(String arg[]){
		
		Human tom;
		
		tom = new Human();
		tom.age = 30;
		tom.eyeColor = "brown";
		tom.name = "Tom";
		tom.heightInInches = 63;
		
		tom.speak();
		
		
		Human foued = new Human();
		foued.age = 30;
		foued.eyeColor = "brown";
		foued.name= "Foued";
		foued.heightInInches = 63;
			
		foued.speak();
	}
	
}
