package newspaper.api;

import java.util.ArrayList;
import java.util.List;

public abstract class NewspaperAppServer {
    List<NewspaperAppClient> clients = new ArrayList<NewspaperAppClient>();

    public void registerClient(NewspaperAppClient client) {
        clients.add(client);
    }

    public void unregisterClient(NewspaperAppClient client) {
        clients.remove(client);
    }

    public void notifyAllCLients() {
        for(NewspaperAppClient client : clients) {
            client.update();
        }
    }
}
