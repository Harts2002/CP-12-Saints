package a5;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.HashMap;
import java.util.HashSet;
import java.util.List;
import java.util.Set;
import java.util.Stack;
import common.NotImplementedError;
import graph.Edge;
import graph.Node;
import project4.Heap;
import graph.LabeledEdge;

/** We've provided depth-first search as an example; you need to implement Dijkstra's algorithm.
 */
public class GraphAlgorithms  {
	/** Return the Nodes reachable from start in depth-first-search order */
	public static <N extends Node<N,E>, E extends Edge<N,E>>
	List<N> dfs(N start) {
		
		Stack<N> worklist = new Stack<N>();
		worklist.add(start);
		
		Set<N>   visited  = new HashSet<N>();
		List<N>  result   = new ArrayList<N>();
		while (!worklist.isEmpty()) {
			// invariants:
			//    - everything in visited has a path from start to it
			//    - everything in worklist has a path from start to it
			//      that only traverses visited nodes
			//    - nothing in the worklist is visited
			N next = worklist.pop();
			visited.add(next);
			result.add(next);
			for (N neighbor : next.outgoing().keySet())
				if (!visited.contains(neighbor))
					worklist.add(neighbor);
		}
		return result;
	}
	
	/**
	 * Return a minimal path from start to end.  This method should return as
	 * soon as the shortest path to end is known; it should not continue to search
	 * the graph after that. 
	 * 
	 * @param <N> The type of nodes in the graph
	 * @param <E> The type of edges in the graph; the weights are given by e.label()
	 * @param start The node to search from
	 * @param end   The node to find
	 */
	
	public static <N extends Node<N,E>, E extends LabeledEdge<N,E,Integer>>
	List<N> shortestPath(N start, N end) {
		
		List<N> res = new ArrayList<N>();
		HashMap<N, N> visited = new HashMap<N, N>();
		HashMap<N, N> nodeBack = new HashMap<N, N>();
		
		Heap<N, Integer> road = new Heap<N, Integer>(new Comparator<Integer>()
		{
			public int compare(Integer int1, Integer int2)
			{
				return int2.intValue() - int1.intValue();
			}
		});
		
		road.add(start, 0);
	
		boolean hasRoad = false;
		while(road.size() > 0)
		{
			N n = road.peek();
			int startWeight = road.getPriority(n);
			road.poll();
			
			visited.put(n, n);
			
			for(N neighbor : n.outgoing().keySet())
			{
				if(neighbor.equals(end))
					hasRoad = true;
				int weight = n.outgoing().get(neighbor).label() + startWeight;
				if(road.hasNode(neighbor))
				{
					if(road.getPriority(neighbor) > weight)
					{
						int weight2 = n.outgoing().get(neighbor).label() + startWeight;
						nodeBack.put(neighbor, n);
					}
				}
				else
				{
					if(!visited.containsKey(neighbor))
					{
						nodeBack.put(neighbor, n);
						road.add(neighbor, weight);
					}
				}
			}
		}
		
		if(!hasRoad)
			return new ArrayList<N>();
		
		
		nodeBack.put(start, start);

		Node temp = nodeBack.get(end);
		while(!nodeBack.isEmpty())
		{
			res.add(nodeBack.get(temp));
			Node temp2 = temp;
			temp = nodeBack.get(temp);
			nodeBack.remove(temp2);
		}
		res.add(end);
		return res;
	}
	
}