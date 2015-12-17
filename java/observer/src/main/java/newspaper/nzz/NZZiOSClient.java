package newspaper.nzz;

import newspaper.api.NewspaperAppClient;

public class NZZiOSClient implements NewspaperAppClient {
    public void update() {
        System.out.println("This is a iOS notification from nzz!");
    }
}
