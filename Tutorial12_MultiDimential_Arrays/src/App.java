
public class App {

	public static void main(String[] args) {
		
		int[] values = {3, 5, 234};
		
		System.out.println(values[2]);
		
		int[][] grid = {
				{3, 5, 234},
				{2, 4},
				{3, 5, 234, 18484}
					
		};
		System.out.println(grid[1][1]);
		
		String[][] texts = new String[2][3];
		
		System.out.println(texts[0][1]);
		
		texts[0][1] = "Hello there";
		
		System.out.println(texts[0][1]);
		
		for(int row=0;row<grid.length; row++) {
			for (int col=0; col<grid[row].length;col++) {
				System.out.println(grid[row][col]);
				
			}
			
		}
	}

}
