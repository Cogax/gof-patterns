package newspaper.newYorkTimes;

import newspaper.api.NewspaperAppClient;

public class NewYorkTimesiOSClient implements NewspaperAppClient {
    public void update() {
        System.out.println("This is a iOS notification from new york times!");
    }
}
