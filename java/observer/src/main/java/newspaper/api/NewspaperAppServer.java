package newspaper.api;

import java.util.ArrayList;
import java.util.List;

public abstract class NewspaperAppServer {
    private List<NewspaperAppClient> clients = new ArrayList<NewspaperAppClient>();

    public void registerClient(NewspaperAppClient client) {
        clients.add(client);
    }

    public void unregisterClient(NewspaperAppClient client) {
        clients.remove(client);
    }

    public int countClients() {
        return clients.size();
    }

    public void notifyAllCLients() {
        for(NewspaperAppClient client : clients) {
            client.update();
        }
    }
}
